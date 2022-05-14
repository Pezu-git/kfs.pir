<?php

namespace App\Http\Controllers;

use App\Models\Colaborators;
use Illuminate\Http\Request;
use App\Http\Requests\RecruitmentRequest;
 
class ColaboratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colab = Colaborators::orderBy('surname')->get();
        return view('colaborators', ['colaborators' => $colab]);
    }

    public function card(Request $request)
    {
        $card = Colaborators::where('id', $request->id)->first();
        return view('colaboratorCard', ['card' => $card]);
    }

    public function reRecruitment(Request $request)
    {
        $colab = Colaborators::where('id', $request->id)->first();
        $colab->status = 1;
        $colab->save();
        return redirect()->route('main');
    }

    public function recruitment(RecruitmentRequest $request)
    {
        Colaborators::create($request->validated());
        return redirect()->route('main');
    }

    public function update(Request $request)
    {
        $all = $request->all();
        $colab = Colaborators::where('id', $request->id)->first();
        foreach ($all as $key => $value) 
        {
            if ($colab[$key] && $colab[$key] !== $value) 
            {
                $colab[$key] = $all[$key];
                $colab['characteristic'] = $all['characteristic'];
                $colab->save();
            }
        }
        return redirect()->route('main');
    }

    public function search(Request $request)
    {
        $arr = [];
        $f = Colaborators::all();
        for ($i = 0; $i < count($f); $i++) 
        {
            $fullNameStr = mb_strtolower($f[$i]['surname'] . $f[$i]['name'] . $f[$i]['patronymic']);
            if (strpos($fullNameStr, mb_strtolower($request->search)) !== false) 
            {
                $arr[] = $f[$i];
            }
        }
        if($arr !== []) 
        {
            return view('colaborators', ['colaborators' => $arr]);
        }
        return redirect()->route('main');
    }

    public function dismiss(Request $request)
    {
        $colab = Colaborators::where('id', $request->id)->first();
        $colab->status = 0;
        $colab->clearance = 0;
        $colab->save();
        return redirect()->route('main');
    }
}
