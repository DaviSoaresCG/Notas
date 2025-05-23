<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Services\Operations;
use Exception;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NoteController extends Controller
{

    public function newNote()
    {
        return view('create');
    }

    public function newNoteSubmit(Request $request)
    {
        //validate request
        $message  = [
            'required' => 'Preencha o campo :attribute',
            'title.min' => 'Escreva mais de 3 caracteres',
            'title.max' => 'Escreva menos de 200 caracteres',
            'text.min' => 'Escreva mais de 3 caceteres',
            'text.max' => 'Escreva menos de 3000 caraceteres'
        ];

        $request->validate([
            'title' => 'required|min:3|max:200',
            'text' => 'required|min:3|max:3000'
        ], $message);

        //get user id
        $id = session('user.id');
        $note = new Note();

        $note->usuario_id = $id;
        $note->title = $request->input('title');
        $note->text = $request->input('text');

        $note->save();
        return redirect()->route('home');
    }

    public function editNoteSubmit(Request $request)
    {
        //validate request
        $message  = [
            'required' => 'Preencha o campo :attribute',
            'title.min' => 'Escreva mais de 3 caracteres',
            'title.max' => 'Escreva menos de 200 caracteres',
            'text.min' => 'Escreva mais de 3 caceteres',
            'text.max' => 'Escreva menos de 3000 caraceteres'
        ];

        $request->validate([
            'title' => 'required|min:3|max:200',
            'text' => 'required|min:3|max:3000'
        ], $message);


        //check if note_id exists
        if ($request->input('noteId') == null) {
            return redirect()->route('home');
        }

        //decrypt noteId
        $noteId = Operations::decryptId($request->input('noteId'));

        if ($noteId === null) {
            return redirect()->route('home');
        }
        //load  note
        $note = Note::find($noteId);

        //update note
        $note->text = $request->input('text');
        $note->title = $request->input('title');
        $note->save();

        //redirect to home
        return redirect()->route('home');
    }

    public function editNote($id)
    {
        $idNote = Operations::decryptId($id);

        if ($idNote === null) {
            return redirect()->route('home');
        }
        $note = Note::find($idNote);
        return view('edit', compact('note'));
    }

    public function deleteNote($id)
    {
        $id = Operations::decryptId($id);

        if ($id === null) {
            return redirect()->route('home');
        }
        //load note
        $note = Note::find($id);

        //show delete note confirmate

        return view('delete_note', compact('note'));
    }

    public function deleteNoteConfirm(Request $request)
    {
        $id = $request->input('noteId');
        $id = Operations::decryptId($id);

        if ($id === null) {
            return redirect()->route('home');
        }
        $note = Note::find($id);

        // soft delete
        $note->delete();

        // hard delete
        // $note->forceDelete();

        return redirect()->route('home');
    }
}
