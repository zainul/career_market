<?php

namespace App\Http\Controllers;
use App\Models\Currency;
use App\Models\Category;
use App\Models\Location;
use App\Models\EmploymentType;
use App\Models\Industry;
use App\Models\ExperienceLevel;
use App\Models\Functional;
use App\Models\Education;
use App\Models\Job;
use Response;

class AppBaseController extends Controller
{
  protected function currency() {
    return Currency::all();
  }

  protected function category() {
    return Category::all();
  }

  protected function location() {
    return Location::all();
  }

  protected function employmentType() {
    return EmploymentType::all();
  }

  protected function industry() {
    return Industry::all();
  }

  protected function experienceLevel() {
    return ExperienceLevel::all();
  }

  protected function functional() {
    return Functional::all();
  }

  protected function education() {
    return Education::all();
  }

  protected function job() {
    return Job::where('company_id', \Auth::user()->company()[0]->id)->get();
  }
}
