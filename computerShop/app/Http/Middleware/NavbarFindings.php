<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\product;

class NavbarFindings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //redirect()->route(products.findings);

        $categorys = Product::select('pCategory')->pluck('pCategory');
        $categorys = $categorys->unique();
        session()->put('pCategorys',json_encode($categorys));

        foreach($categorys as $category){
            $types = Product::select('pType')->where('pCategory',$category)->pluck('pType');
            $types =$types->unique();
            session()->put($category,json_encode($types));
        }

        return $next($request);
    }
}
