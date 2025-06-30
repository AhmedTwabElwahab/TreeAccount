<?php

namespace App\Http\Controllers;

use App\Models\chart_account;
use Illuminate\Contracts\View\View;

class ChartAccountController extends Controller
{
    public function index() : View
    {
        $accounts = chart_account::all();
        $chart_accounts = $this->getAllChildren($accounts);
        return view('welcome',compact('chart_accounts'));
    }

    /**
     * Get all Children.
     *
     * @param $accounts
     * @param $parentId
     * @return array
     */
    private function getAllChildren($accounts, $parentId = null): array
    {
        $tree = [];
        foreach ($accounts as $account)
        {
            if ($account->parent_id == $parentId)
            {
                $children = $this->getAllChildren($accounts, $account->id);

                $tree[] = [
                    'id' => $account->id,
                    'name' => $account->name,
                    'children' => $children
                ];
            }
        }

        return $tree;
    }

}
