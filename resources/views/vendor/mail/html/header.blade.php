@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://dinfotel.co.tz/assets/images/logo-dark.png"  class="logo" alt="Dinfotel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
