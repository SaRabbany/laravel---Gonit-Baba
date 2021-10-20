 @extends('includes.app')
 @section('content')

    @section('customCss')

    <link rel="stylesheet" href="{{ asset('css/question/addQuestion.css') }}">

    @endsection

                <div class="leave_answer">
                   <div class="leave_answer_title">
                        <h2>What You Want to know </h2>
                   </div>
                   <div class="leave_answer_form">
                       <form class="row g-3" method="POST" action="{{ route('questions.store') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="col-12">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="let us know what you want to know" required>
                        </div>

                        <div class="col-12">

                          <textarea name="description" class="form-control" id="description" cols="30" rows="10" required></textarea>

                        </div>


                                <div class="col-12">
                                    <label for="uploadImage">Upload Image </label>
                                    <input type="file" class="form-control" name="image" id="uploadImage">
                                </div>

                            <div class="form-group">
                            <label for="sel1">Select category</label>
                            <select class="form-control" id="category" name="category[]" required title="Chose Category">

                                    <option disabled selected value> Please Chose Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endforeach



                            </select>
                            </div>

                            <div class="col-12">
                                <button class="btn common-button btn-success d-inline-block" type="submit">Submit</button>
                            </div>


                       </form>
                   </div>
                </div>



 @endsection