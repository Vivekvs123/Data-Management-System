<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;




class ReportController extends Controller
{
    public function exportCsv(Request $request)
    {
       $fileName = 'tasks.csv';
       $tasks = User::all();
    
            $headers = array(
                "Content-type"        => "text/csv",
                "Content-Disposition" => "attachment; filename=$fileName",
                "Pragma"              => "no-cache",
                "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                "Expires"             => "0"
            );
    
            $columns = array('Id', 'First Name', 'Last Name', 'Email', 'Role');
    
            $callback = function() use($tasks, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);
    
                foreach ($tasks as $task) {
                    $row['Id']  = $task->id;
                    $row['First Name']    = $task->firstname;
                    $row['Last Name']    = $task->lastname;
                    $row['Email']  = $task->email;
                    $row['Role']  = $task->role_id;
    
                    fputcsv($file, array($row['Id'], $row['First Name'], $row['Last Name'], $row['Email'], $row['Role']));
                }
    
                fclose($file);
            };
    
            return response()->stream($callback, 200, $headers);
        }
   

    public function report(){
        return view('salesteam.report');
    }
}
