<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\View\View;

class StoryblokEditor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$response = $next($request);

		if ($request->ajax() && ($content = $response->getOriginalContent()) instanceof View) {

			return $response->setContent($content->renderSections()['content']);

			//dd($sections);

			//return $response->setContent(array_get($sections, 'content'));

		}

		return $response;
    }
}
