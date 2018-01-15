<?php

namespace App\Http\Middleware;

use Closure;
use App;
class CheckLang
{
	/**
	 * 返回请求过滤器
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$lang = session('lang');
		if ($lang) {
			App::setLocale($lang);
		}else{
			App::setLocale('en');
		}
		return $next($request);
	}

}