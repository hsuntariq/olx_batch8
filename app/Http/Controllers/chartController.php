<?php

namespace App\Http\Controllers;

use App\Charts\analysisChart;
use App\Models\UserProducts;
use Illuminate\Http\Request;

class chartController extends Controller
{
    public function makeChart()
    {
        $data = UserProducts::pluck('title', 'price');


        $chart = new analysisChart();
        $chart2 = new analysisChart();
        $chart3 = new analysisChart();
        $chart->labels($data->values());
        $chart->dataset('products', 'pie', $data->keys())->options([
            "backgroundColor" => ['red', 'green', 'yellow']
        ]);
        $chart2->labels($data->values());
        $chart2->dataset('products', 'line', $data->keys())->options([
            "backgroundColor" => ['red', 'green', 'yellow']
        ]);
        $chart3->labels($data->values());
        $chart3->dataset('products', 'bar', $data->keys())->options([
            "backgroundColor" => ['red', 'green', 'yellow']
        ]);


        return view('pages.admin.analytics', compact('chart', 'data', 'chart2', 'chart3'));
    }
}
