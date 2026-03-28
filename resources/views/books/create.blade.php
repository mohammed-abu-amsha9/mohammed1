@extends('books.parent')
@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0">

        <div class="card-header bg-primary text-white text-center">
            <h4>📚 إضافة كتاب جديد</h4>
        </div>

        <div class="card-body">



            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">📖 عنوان الكتاب</label>
                    <input type="text" name="title" class="form-control" placeholder="أدخل عنوان الكتاب" value="{{ old('title') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">✍️ المؤلف</label>
                    <input type="text" name="author" class="form-control" placeholder="اسم المؤلف" value="{{ old('author') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">📅 سنة النشر</label>
                    <input type="number" name="year_published" class="form-control" placeholder="مثال: 2026" value="{{ old('year_published') }}">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        💾 حفظ الكتاب
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
