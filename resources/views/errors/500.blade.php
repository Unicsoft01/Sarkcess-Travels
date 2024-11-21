@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error, possibly something went wrong. please contact the Dev Team! possibly with a screenshot and description of what you were doing before the error occured'))
