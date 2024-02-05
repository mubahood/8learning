<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            /*             ->description('Description...')
            ->row(Dashboard::title()) */
            ->row(function (Row $row) {

                $row->column(12, function (Column $column) {
                    $u = \Encore\Admin\Facades\Admin::user();
                    if (!$u->isRole('administrator')) {
                    }
                    $subscriptions = \App\Models\Participant::where('user_id', $u->id)->get();

                    if ($subscriptions->count() > 0) {
                        $column->append('<h3>Subscribed Courses</h3>');
                        $column->append('<table class="table table-striped table-bordered table-hover">');
                        $column->append('<thead>');
                        $column->append('<tr>');
                        $column->append('<th>Course</th>');
                        $column->append('<th>Activation Status</th>');
                        $column->append('<th>Payment Status</th>');
                        $column->append('<th>Payment Method</th>');
                        $column->append('<th>Payment Reference</th>');
                        $column->append('<th>Date</th>');
                        $column->append('</tr>');
                        $column->append('</thead>');
                        $column->append('<tbody>');
                        foreach ($subscriptions as $s) {
                            $column->append('<tr>');
                            $column->append('<td>' . $s->course->title . '</td>');
                            $column->append('<td>' . $s->activation_status . '</td>');
                            $column->append('<td>' . $s->payment_status . '</td>');
                            $column->append('<td>' . $s->payment_method . '</td>');
                            $column->append('<td>' . $s->payment_reference . '</td>');
                            $column->append('<td>' . $s->created_at . '</td>');
                            $column->append('</tr>');
                        }
                        $column->append('</tbody>');
                        $column->append('</table>');
                        
                    } else {
                        $box = new \Encore\Admin\Widgets\Box(
                            'Alert',
                            'You have not subscribed to any course yet. Please click on the "<b>Subscribe to course</b>" button to subscribe to a course.'
                        );
                        $column->append($box);
                    }
                });

                return $row;
                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
}
