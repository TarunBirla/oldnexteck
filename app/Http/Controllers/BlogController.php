<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Fallback catalog when database is not connected or empty.
     */
    public static function getDefaultCatalog(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Critical Spare Parts & OEM Sourcing Architecture for Oil, Gas & Petrochemical Refineries',
                'slug' => 'spare-parts-oem-sourcing-oil-gas-petrochemicals',
                'description' => "## Engineering Supply Chain Resilience in Heavy Process Operations\n\nOperating petrochemical facilities and high-pressure drilling equipment demands verified OEM traceability and rapid spares deployment. In high-stakes manufacturing and extraction environments, supply chain delays directly translate into catastrophic daily downtime costs.\n\n### The Strategic Approach to Global Component Procurement\n\nAt Nexteck, our bilateral sourcing architecture bridges Tier-1 suppliers across the UK, Europe, India, and East Asia, delivering certified compliance, rigorous QA inspections, and expedited customs transit.\n\n> \"Supply resilience is no longer just procurement—it is a critical board-level operational safeguard.\"\n\n- Guaranteed material test certificates (MTC) and pressure test documentation\n- Dual-source supplier validation for critical flow-control valves and rotating equipment\n- End-to-end logistics coordination reducing operational lead times by 38%",
                'image' => 'images/2.jpg',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'id' => 2,
                'title' => 'Legacy Cloud Modernization & Regulated Banking Architecture: Navigating DORA & FCA Compliance',
                'slug' => 'cloud-migration-modernization-financial-services',
                'description' => "## Transitioning Core Financial Workloads to Resilient Cloud Platforms\n\nFinancial institutions face an unprecedented regulatory imperative under DORA and operational resilience mandates. Modernizing legacy monolithic core banking frameworks requires surgical precision without service disruption.\n\n### Architecting Fault-Tolerant Microservices\n\nOur engineering framework isolates core ledger transactions within zero-trust enclaves while orchestrating asynchronous message queues that absorb peak clearing volumes.\n\n> \"Resilient digital banking architecture balances real-time liquidity processing with unyielding auditability.\"\n\n- Event-driven transaction pipelines with multi-region failover\n- Real-time automated regulatory reporting workflows\n- Zero-trust cryptographic security policies compliant with international banking standards",
                'image' => 'images/0.jpg',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(12),
            ],
            [
                'id' => 3,
                'title' => 'Accelerating Industry 4.0: IIoT Sensor Integration & Predictive Maintenance in Heavy Industry',
                'slug' => 'smart-manufacturing-iiot-predictive-maintenance',
                'description' => "## Eliminating Unplanned Downtime Through Edge Telemetry and Machine Learning\n\nModern discrete and continuous process plants generate millions of data points per minute. Transforming this edge telemetry into actionable maintenance triggers is the key to double-digit EBITDA improvements.\n\n### Real-Time Condition Monitoring at Scale\n\nBy integrating vibration, thermal, and acoustic sensors directly into manufacturing SCADA architectures, engineering teams can forecast bearing failures and valve fatigue 30 days before catastrophic failure occurs.\n\n> \"Predictive telemetry transforms maintenance departments from cost centers into proactive productivity drivers.\"\n\n- Edge-native inference engines deployed directly on shop-floor gateways\n- Unified time-series telemetry dashboards integrated with ERP systems\n- Proven 42% reduction in unbudgeted equipment outages across heavy industrial plants",
                'image' => 'images/1.jpg',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ]
        ];
    }

    /**
     * Display a listing of active blogs sorted by sort_order (6 per page).
     */
    public function index()
    {
        try {
            $blogs = Blog::where('is_active', true)
                ->orderBy('sort_order', 'asc')
                ->latest()
                ->paginate(6);
        } catch (\Throwable $e) {
            $items = collect(self::getDefaultCatalog())->map(function ($item) {
                $b = new Blog();
                $b->id = $item['id'];
                $b->title = $item['title'];
                $b->slug = $item['slug'];
                $b->description = $item['description'];
                $b->image = $item['image'];
                $b->sort_order = $item['sort_order'];
                $b->is_active = $item['is_active'];
                $b->created_at = $item['created_at'];
                $b->updated_at = $item['updated_at'];
                return $b;
            });

            $page = request()->get('page', 1);
            $perPage = 6;
            $paginatedItems = $items->slice(($page - 1) * $perPage, $perPage)->all();
            $blogs = new \Illuminate\Pagination\LengthAwarePaginator(
                $paginatedItems,
                $items->count(),
                $perPage,
                $page,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        }

        return view('blogs.index', compact('blogs'));
    }

    /**
     * Display the specified blog detail.
     */
    public function show($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)
                ->where('is_active', true)
                ->first();

            if (!$blog) {
                $fallback = collect(self::getDefaultCatalog())->firstWhere('slug', $slug);
                if ($fallback) {
                    $b = new Blog();
                    foreach ($fallback as $k => $v) {
                        $b->{$k} = $v;
                    }
                    $blog = $b;
                } else {
                    abort(404);
                }
            }
        } catch (\Throwable $e) {
            $fallback = collect(self::getDefaultCatalog())->firstWhere('slug', $slug);
            if (!$fallback) {
                abort(404);
            }
            $blog = new Blog();
            foreach ($fallback as $k => $v) {
                $blog->{$k} = $v;
            }
        }

        return view('blogs.show', compact('blog'));
    }
}
