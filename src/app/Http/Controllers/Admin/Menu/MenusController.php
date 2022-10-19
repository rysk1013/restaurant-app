<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Mneu\MenuRequest;
use App\Services\MenuService;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenuService $menuService)
    {
        $menus = $menuService->getMenusForAdmin();

        return view('admin.menu.index')
            ->with('menus', $menus);
    }

    public function renderList(Request $request, MenuService $menuService)
    {
        $menus = $menuService->renderMenuList($request->query('sort'), $request->query('order'));

        return view('admin.menu.index')
            ->with('menus', $menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MenuService $menuService)
    {
        $subcategories = $menuService->getSubcategories();

        return view('admin.menu.create')
            ->with('subcategories', $subcategories);
    }

    public function confirm(MenuRequest $request, MenuService $menuService)
    {
        $subcategories = $menuService->getSubcategories();

        return view('admin.menu.confirm')
            ->with([
                'posts' => $request,
                'subcategories' => $subcategories,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MenuService $menuService)
    {
        if (isset($request['modify'])) {
            return redirect()->route('menu.create')
                ->withInput();
        }

        $menuService->saveMenu($request);

        $request->session()->regenerateToken();

        return view('admin.menu.done');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, MenuService $menuService)
    {
        $subcategories = $menuService->getSubcategories();
        $menu = $menuService->getMenu($id);

        return view('admin.menu.edit')
            ->with([
                'id' => $id,
                'subcategories' => $subcategories,
                'menu' => $menu,
            ]);
    }

    public function editConfirm(MenuRequest $request, MenuService $menuService)
    {
        $subcategories = $menuService->getSubcategories();

        return view('admin.menu.edit_confirm')
            ->with([
                'subcategories' => $subcategories,
                'posts' => $request,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, MenuService $menuService)
    {
        if (isset($request['modify'])) {
            return redirect()->route('menu.edit', ['id' => $id])
                ->withInput();
        }

        $menuService->updateMenu($request);

        $request->session()->regenerateToken();

        return view('admin.menu.edit_done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
