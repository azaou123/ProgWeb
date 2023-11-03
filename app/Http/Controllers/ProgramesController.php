<?php

namespace App\Http\Controllers;
use App\Models\Academic_program;
use App\Models\Cultural_program;
use Illuminate\Http\Request;

class ProgramesController extends Controller
{
    public function index(){

        $dataAcademic = Academic_program::all();
        $dataCulturel = Cultural_Program::all();
        return view('programs',['dataAcademic'=>$dataAcademic,'dataCulturel'=>$dataCulturel]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. La validation
        $this->validate($request, [
            'title' => 'bail|required|string|max:255',
            "picture" => 'bail|required|image|max:1024',
            "content" => 'bail|required',
        ]);

        // 2. On upload l'image dans "/storage/app/public/posts"
        $chemin_image = $request->picture->store("posts");

        // 3. On enregistre les informations du Post
        Post::create([
            "title" => $request->title,
            "picture" => $chemin_image,
            "content" => $request->content,
        ]);

        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("posts.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataAcademic = Academic_program::all();
        $dataCulturel = Cultural_Program::all();

        return view('academicProgram', ['dataAcademic' => $dataAcademic ,'dataCulturel'=> $dataCulturel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 1. La validation

        // Les règles de validation pour "title" et "content"
        $rules = [
            'title' => 'bail|required|string|max:255',
            "content" => 'bail|required',
        ];

        // Si une nouvelle image est envoyée
        if ($request->has("picture")) {
            // On ajoute la règle de validation pour "picture"
            $rules["picture"] = 'bail|required|image|max:1024';
        }

        $this->validate($request, $rules);

        // 2. On upload l'image dans "/storage/app/public/posts"
        if ($request->has("picture")) {

            //On supprime l'ancienne image
            Storage::delete($post->picture);

            $chemin_image = $request->picture->store("posts");
        }

        // 3. On met à jour les informations du Post
        $post->update([
            "title" => $request->title,
            "picture" => isset($chemin_image) ? $chemin_image : $post->picture,
            "content" => $request->content
        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("posts.show", $post));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }
}
