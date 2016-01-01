@extends('orchestra/foundation::emails.layouts.action')

@set_meta('title', 'Password Reset')

@section('content')
<table width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="content-block aligncenter">
            <h2>Password Reset</h2>
        </td>
    </tr>
    <tr>
        <td class="content-block">
            To reset your password, complete this form:
        </td>
    </tr>
    <tr>
        <td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler">
            <a href="{{ handles("orchestra::forgot/reset/{$token}?email={$email}") }}" class="btn-primary" itemprop="url">Reset Your Password</a>
        </td>
    </tr>
    <tr>
        <td class="content-block">
            This link will expire in {{ config('auth.passwords.'.config('auth.defaults.passwords', 'users').'.expire', 60) }} minutes.
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
