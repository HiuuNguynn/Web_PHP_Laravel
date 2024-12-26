<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    // Hiển thị danh sách sinh viên
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Hiển thị form tạo sinh viên mới
    public function create()
    {
        return view('students.create');
    }

    // Lưu sinh viên mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Age' => 'required|integer',
            'Address' => 'required',
            'Score' => 'required|numeric',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index');
    }

    // Hiển thị form chỉnh sửa sinh viên
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Cập nhật thông tin sinh viên
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'Name' => 'required',
            'Age' => 'required|integer',
            'Address' => 'required',
            'Score' => 'required|numeric',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index');
    }

    // Tìm kiếm sinh viên
    public function find(Request $request)
    {
        $search = $request->input('search'); // Get the search keyword from the request

        // Search for students based on their name, address, or other attributes
        $students = Student::where('Name', 'like', '%' . $search . '%')
                        ->orWhere('Address', 'like', '%' . $search . '%')
                        ->get();

        // Return the search results to a view
        return view('students.search', compact('students', 'search'));
    }


    // Xóa sinh viên
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }


}
