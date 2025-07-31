<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('activitylog:clean')->daily();
