<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraSchedule;
use App\Models\NraSeriesGenre;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    /**
     * Display a dashboard with multiple analytics visualizations.
     */
    public function index()
    {
        // 1. SCHEDULE PERFORMANCE: Technical Interruptions vs. Viewer Count
        $scheduleData = $this->getSchedulePerformanceData();

        // 2. CONTENT POPULARITY: Distribution of Series by Genre
        $genreData = $this->getGenreDistributionData();

        // Pass all computed data to the dashboard view
        return view('admin.analytics.index', compact('scheduleData', 'genreData'));
    }

    /**
     * Computes the average viewers based on technical interruption status (NraSchedule).
     */
    private function getSchedulePerformanceData()
    {
        return NraSchedule::select('Tech_Interrupt')
            ->selectRaw('AVG(Viewers) as average_viewers') // Viewers column in nra_schedule
            ->groupBy('Tech_Interrupt')
            ->get()
            ->keyBy('Tech_Interrupt')
            ->map(fn($item) => (int)$item->average_viewers)
            ->toArray();
    }

    /**
     * Computes the count of webseries per genre (NraSeriesGenre and NraGenre).
     */
    private function getGenreDistributionData()
    {
        return NraSeriesGenre::join('nra_genre', 'nra_genre.Genre_ID', '=', 'nra_series_genre.Genre_ID')
            ->select('nra_genre.Name') // Genre Name from nra_genre
            ->selectRaw('COUNT(nra_series_genre.Series_ID) as series_count')
            ->groupBy('nra_genre.Name')
            ->orderByDesc('series_count')
            ->limit(10) // Focus on top 10 for visualization clarity
            ->get()
            ->pluck('series_count', 'Name')
            ->toArray();
    }
}