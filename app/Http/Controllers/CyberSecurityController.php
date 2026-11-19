<?php

namespace App\Http\Controllers;

use App\Models\LeadRequest;
use App\Models\Visitor;
use App\Mail\AdminLeadNotificationMail;
use App\Mail\UserLeadConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class CyberSecurityController extends Controller
{
    /**
     * Show the Cyber Security Solutions & Audit page.
     */
    public function index()
    {
        return view('pages.cybersecurity');
    }

    /**
     * Handle Cyber Security Audit lead request submission.
     */
    public function submitAudit(Request $request)
    {
        // Anti-spam honeypot
        if ($request->filled('nxt_website_hp')) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your audit request has been recorded.'
            ]);
        }

        $validated = $request->validate([
            'full_name'      => 'required|string|max:255',
            'work_email'     => 'required|email|max:255',
            'company'        => 'required|string|max:255',
            'phone'          => 'nullable|string|max:50',
            'team_size'      => 'nullable|string|max:100',
            'audit_interest' => 'nullable|string|max:255',
            'notes'          => 'nullable|string|max:2000',
        ]);

        $details = [];
        if (!empty($validated['phone'])) {
            $details[] = 'Phone: ' . $validated['phone'];
        }
        if (!empty($validated['audit_interest'])) {
            $details[] = 'Service Interest: ' . $validated['audit_interest'];
        }
        if (!empty($validated['notes'])) {
            $details[] = 'Notes: ' . $validated['notes'];
        }

        $painPoint = implode(" | ", $details);

        $lead = LeadRequest::create([
            'full_name'  => $validated['full_name'],
            'work_email' => $validated['work_email'],
            'company'    => $validated['company'],
            'team_size'  => $validated['team_size'] ?? '1-10 employees',
            'pain_point' => $painPoint ?: 'Cyber Security Audit Inquiry',
        ]);

        Visitor::recordFormSubmission($request, 'Cyber Security Audit Inquiry', [
            'name'    => $lead->full_name,
            'email'   => $lead->work_email,
            'company' => $lead->company,
            'service' => $validated['audit_interest'] ?? 'Cyber Security Audit',
        ]);

        try {
            $adminEmail = env('ADMIN_MAIL', 'info@nexteck.co.uk');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new AdminLeadNotificationMail($lead));
            }

            if ($lead->work_email) {
                Mail::to($lead->work_email)->send(new UserLeadConfirmationMail($lead));
            }
        } catch (\Throwable $e) {
            Log::error('Cyber Security lead email notification error: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you, ' . $lead->full_name . '! Your Cyber Security Audit request has been received. Our senior security specialist will contact you within 24 hours.'
        ]);
    }
}
