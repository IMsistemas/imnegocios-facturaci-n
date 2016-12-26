
Estimado(a): {{ $user->getName() }} <br>
Click aquí para cambiar su contraseña: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset())  }}"> {{ $link }} </a>

{{--Click aquí para cambiar su contraseña: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()).'?name='.urlencode($user->getName())   }}"> {{ $link }} </a>--}}