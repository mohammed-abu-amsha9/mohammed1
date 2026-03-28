@extends('books.create')
@section('content')
    <div class="card-body">

        @if ($book->count())
            <div class="table-responsive">
                <table class="table table-hover text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>📖 العنوان</th>
                            <th>✍️ المؤلف</th>
                            <th>📅 سنة النشر</th>
                            <th>الاعدادت</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book as $books)
                            <tr>
                                <td>{{ $books->id }}</td>
                                <td>{{ $books->title }}</td>
                                <td>{{ $books->author }}</td>
                                <td>{{ $books->year_published }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">

                                        <!-- زر تعديل -->
                                        <a href="{{ route('books.edit', $books->id) }}"
                                            class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1">
                                            <i class="fas fa-edit"></i>
                                            <span>تعديل</span>
                                        </a>

                                        <!-- زر حذف -->
                                        <form action="{{ route('books.destroy', $books->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1">
                                                <i class="fas fa-trash-alt"></i>
                                                <span>حذف</span>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info text-center">
                لا توجد كتب حالياً 📭
            </div>
        @endif

    </div>

    </div>
@endsection
