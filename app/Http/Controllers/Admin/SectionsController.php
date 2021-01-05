<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SectionValidation;


class SectionsController extends Controller
{
    public function index()
    {
        $sections = sections::all();
        return view('sections.section', compact('sections'));

    }

    public function store(SectionValidation $request)
    {


        sections::create([
            'section_name' => $request->section_name,
            'description' => $request->description,

             'Created_by' => (Auth::user()->name),
        ]);


        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return redirect('/sections');


        


    }    //end of store


    public function show(sections $sections)
    {
        //
    }


    public function edit(sections $sections)
    {
        //
    }


    public function update(Request $request)
    {

        $id = $request->id;

        $this->validate($request, [
            /*    unique:sections-تذكر انه موحد فى الجدول كله وليس الصف لان هذا تعديل                     */
            'section_name' => 'required|max:255|unique:sections,section_name,' . $id,

            'description' => 'required',

        ]);

        $sections = sections::find($id);
        $sections->update([
            'section_name' => $request->section_name,
            'description' => $request->description,
        ]);

        session()->flash('edit', 'تم تعديل القسم بنجاج');
        return redirect('/sections');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\sections $sections
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = sections::find($id)->delete();
        session()->flash('deleted', 'تم حذف القسم بنجاح');
        return redirect('/sections');
    }
}
