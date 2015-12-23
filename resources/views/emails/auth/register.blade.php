@extends('orchestra/foundation::emails.layouts.action')

@set_meta('title', 'Your New Account')

@section('content')
<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="content-block aligncenter"></td>
    </tr>
    <tr>
        <td class="content-block">
            Hello {{ $user['fullname'] }},
        </td>
    </tr>
    <tr>
        <td class="content-block">
            Thank you for registering with us, in order to login please use the following:
        </td>
    </tr>
    <tr>
        <td class="content-block">
            <p>E-mail Address: {{ $user['email'] }}</p>
            <p>Password: {{ $password }}</p>
        </td>
    </tr>
    <tr>
        <td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler">
            <a href="{{ handles("orchestra::login") }}" class="btn-primary" itemprop="url">Login</a>
        </td>
    </tr>
    <tr>
        <td class="content-block">
            &mdash; {{ memorize('site.name') }}
        </td>
    </tr>
</table>
@stop

@section('footer')
<table width="100%">
    <tr>
        <td class="aligncenter content-block"></td>
    </tr>
</table>
@overwrite
