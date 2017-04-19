<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = new \App\Models\Order([
            'user_id' => '1',
            'cart' => 'TzoxNToiQXBwXE1vZGVsc1xDYXJ0Ijo2OntzOjU6Iml0ZW1zIjthOjE6e2k6MjthOjU6e3M6MzoicXR5IjtpOjE7czo1OiJwcmljZSI7ZDoxLjU7czo2OiJ3ZWlnaHQiO2Q6MjUwO3M6NToib2ZmZXIiO2k6MTQ7czo0OiJpdGVtIjtPOjE4OiJBcHBcTW9kZWxzXFByb2R1Y3QiOjIzOntzOjExOiIAKgBmaWxsYWJsZSI7YTo3OntpOjA7czo5OiJpbWFnZVBhdGgiO2k6MTtzOjU6InRpdGxlIjtpOjI7czoxMToiZGVzY3JpcHRpb24iO2k6MztzOjU6InByaWNlIjtpOjQ7czo2OiJ3ZWlnaHQiO2k6NTtzOjU6Im9mZmVyIjtpOjY7czo0OiJzbHVnIjt9czoxMzoiACoAY29ubmVjdGlvbiI7TjtzOjg6IgAqAHRhYmxlIjtOO3M6MTM6IgAqAHByaW1hcnlLZXkiO3M6MjoiaWQiO3M6MTA6IgAqAGtleVR5cGUiO3M6MzoiaW50IjtzOjEwOiIAKgBwZXJQYWdlIjtpOjE1O3M6MTI6ImluY3JlbWVudGluZyI7YjoxO3M6MTA6InRpbWVzdGFtcHMiO2I6MTtzOjEzOiIAKgBhdHRyaWJ1dGVzIjthOjEyOntzOjI6ImlkIjtpOjI7czoxMDoiY3JlYXRlZF9hdCI7czoxOToiMjAxNy0wNC0xNiAwMzowNjoyOCI7czoxMDoidXBkYXRlZF9hdCI7czoxOToiMjAxNy0wNC0xNiAwMzowNjoyOCI7czo5OiJpbWFnZVBhdGgiO3M6NzQ6Imh0dHBzOi8vdWNhcmVjZG4uY29tLzg0NGZkNDgzLWZjNzctNGRlOC1iMzVjLTZkMjFjYjllYTk3ZC9NYW56YW5hMzAwbUwucG5nIjtzOjU6InRpdGxlIjtzOjIzOiJNYW56YW5hIFBvc3RvYsOzbiAzMDBtTCI7czo3OiJjb3VudHJ5IjtzOjE4OiJDb2xvbWJpYSBLb2x1bWJpZW4iO3M6ODoidGVhc2VyZGUiO3M6MTM4OiImI3gxRjREOTsmbmJzcDsgTWFuemFuYSBQb3N0b2LDs24gaXN0IGVpbiBhbGtvaG9sZnJlaWVzLCBrb2hsZW5zw6R1cmVoYWx0aWdlcyBFcmZyaXNjaHVuZ3NnZXRyw6RuayBhdXMgS29sdW1iaWVuIG1pdCBDb2xhL0FwZmVsIEdlc2NobWFjay4iO3M6ODoidGVhc2VyZXMiO3M6MTE3OiImI3gxRjRENTsmbmJzcDsgTWFuemFuYSBQb3N0b2LDs24gZXMgdW5hIGJlYmlkYSBnYXNlb3NhIHJlZnJlc2NhbnRlIHNpbiBhbGNvaG9sIGRlIENvbG9tYmlhIGNvbiBzYWJvciBhIGNvbGEvbWFuemFuYS4iO3M6NToicHJpY2UiO2Q6MS41O3M6Njoid2VpZ2h0IjtkOjI1MDtzOjU6Im9mZmVyIjtpOjE1O3M6NDoic2x1ZyI7czoxMjoiTWFuemFuYTMwMG1MIjt9czoxMToiACoAb3JpZ2luYWwiO2E6MTI6e3M6MjoiaWQiO2k6MjtzOjEwOiJjcmVhdGVkX2F0IjtzOjE5OiIyMDE3LTA0LTE2IDAzOjA2OjI4IjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjE5OiIyMDE3LTA0LTE2IDAzOjA2OjI4IjtzOjk6ImltYWdlUGF0aCI7czo3NDoiaHR0cHM6Ly91Y2FyZWNkbi5jb20vODQ0ZmQ0ODMtZmM3Ny00ZGU4LWIzNWMtNmQyMWNiOWVhOTdkL01hbnphbmEzMDBtTC5wbmciO3M6NToidGl0bGUiO3M6MjM6Ik1hbnphbmEgUG9zdG9iw7NuIDMwMG1MIjtzOjc6ImNvdW50cnkiO3M6MTg6IkNvbG9tYmlhIEtvbHVtYmllbiI7czo4OiJ0ZWFzZXJkZSI7czoxMzg6IiYjeDFGNEQ5OyZuYnNwOyBNYW56YW5hIFBvc3RvYsOzbiBpc3QgZWluIGFsa29ob2xmcmVpZXMsIGtvaGxlbnPDpHVyZWhhbHRpZ2VzIEVyZnJpc2NodW5nc2dldHLDpG5rIGF1cyBLb2x1bWJpZW4gbWl0IENvbGEvQXBmZWwgR2VzY2htYWNrLiI7czo4OiJ0ZWFzZXJlcyI7czoxMTc6IiYjeDFGNEQ1OyZuYnNwOyBNYW56YW5hIFBvc3RvYsOzbiBlcyB1bmEgYmViaWRhIGdhc2Vvc2EgcmVmcmVzY2FudGUgc2luIGFsY29ob2wgZGUgQ29sb21iaWEgY29uIHNhYm9yIGEgY29sYS9tYW56YW5hLiI7czo1OiJwcmljZSI7ZDoxLjU7czo2OiJ3ZWlnaHQiO2Q6MjUwO3M6NToib2ZmZXIiO2k6MTU7czo0OiJzbHVnIjtzOjEyOiJNYW56YW5hMzAwbUwiO31zOjEyOiIAKgByZWxhdGlvbnMiO2E6MDp7fXM6OToiACoAaGlkZGVuIjthOjA6e31zOjEwOiIAKgB2aXNpYmxlIjthOjA6e31zOjEwOiIAKgBhcHBlbmRzIjthOjA6e31zOjEwOiIAKgBndWFyZGVkIjthOjE6e2k6MDtzOjE6IioiO31zOjg6IgAqAGRhdGVzIjthOjA6e31zOjEzOiIAKgBkYXRlRm9ybWF0IjtOO3M6ODoiACoAY2FzdHMiO2E6MDp7fXM6MTA6IgAqAHRvdWNoZXMiO2E6MDp7fXM6MTQ6IgAqAG9ic2VydmFibGVzIjthOjA6e31zOjc6IgAqAHdpdGgiO2E6MDp7fXM6NjoiZXhpc3RzIjtiOjE7czoxODoid2FzUmVjZW50bHlDcmVhdGVkIjtiOjA7fX19czo4OiJ0b3RhbFF0eSI7aToxO3M6MTA6InRvdGFsUHJpY2UiO2Q6MS41O3M6MTE6InRvdGFsV2VpZ2h0IjtkOjI1MDtzOjEwOiJ0b3RhbE9mZmVyIjtpOi0xO3M6OToidG90YWxQb3N0IjtpOjA7fQ==',
            'address' => 'Windeggstrasse',
            'nummer' => '7',
            'postleitzahl' => '8953',
            'city' => 'Dietikon',
            'name' => 'Mauricio',
            'surname' => 'Ramirez',
            'payment_id' => 'ch_1A93l6D5Hus6m2Z8kwzXMBxY',
            'created_at' => '2017-04-16 03:09:04',
            'updated_at' => '2017-04-16 03:09:04',

        ]);
        $orders->save(); 
    }
}