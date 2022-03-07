@extends('layout.master')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<h1>Welkom!</h1>
<a type="button" href="{{ route('users.index') }}" class="btn btn-primary btn-lg btn-block">Users</a>
<a type="button" href="{{ route('messages.index') }}" class="btn btn-success btn-lg btn-block">Messages</a>
</html>
