@extends('layouts.admin')
@push('styles')
    <style>
        #container {
            min-width: 100px;
            margin: 20px auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
@endpush
@section('content')
    <div class="w-100 m-0 p-0">
        <div class="cotainer">
            <div class="row">
                <h4>
                    BLOG
                </h4>
            </div>
            {!! Form::open(['route' => ['blog.update',$blog->id],'files' => true]) !!}
            @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('title', 'Title', ['class' => 'form-label']) }}
                            {{ Form::text('title', old('title',$blog->title) ,['class' => 'form-control']) }}
                            @error('title')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('image', 'Image', ['class' => 'form-label']) }}
                            {{ Form::file('blog_image',['class' => 'form-control','multiple' => true]) }}
                            @error('blog_image')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('alt_text', 'Alt text for main display image', ['class' => 'form-label']) }}
                            {{ Form::text('alt_text', old('alt_text',$blog->alt_text) ,['class' => 'form-control']) }}
                            @error('alt_text')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('meta description', 'Meta Description', ['class' => 'form-label']) }}
                            {{ Form::textarea('meta_description', old('meta_description',$blog->meta_description) ,['class' => 'form-control','rows' => 3]) }}
                            @error('meta_description')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('Body', 'Body', ['class' => 'form-label']) }}
                            {{ Form::textarea('body', old('body',$blog->body) ,['class' => 'form-control','id' => 'editor']) }}
                            @error('body')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group mb-2">
                            {{ Form::label('schdule publish time', 'Schedule publish time', ['class' => 'form-label']) }}
                            {{ Form::date('publish_time', null ,['class' => 'form-control','disabled' => true]) }}
                            @error('publish_time')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-check my-2">
                            {{ Form::checkbox('status', $blog->status , $blog->status === 1 ? true : false,['class' => 'form-check-input']) }}
                            {{ Form::label('Do you want to publish this post now?', 'Do you want to publish this post now?', ['class' => 'form-check-label']) }}
                          </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success px-4 py-2">UPDATE BLOG</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>
    <script>
        // ClassicEditor
        //     .create(document.querySelector('#valueEditor'))
        //     .catch(error => {
        //         console.error(error);
        //     });
        loadCkEditor();
        function loadCkEditor(){
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },

            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    // {
                    //     model: 'heading4',
                    //     view: 'h4',
                    //     title: 'Heading 4',
                    //     class: 'ck-heading_heading4'
                    // },
                    // {
                    //     model: 'heading5',
                    //     view: 'h5',
                    //     title: 'Heading 5',
                    //     class: 'ck-heading_heading5'
                    // },
                    // {
                    //     model: 'heading6',
                    //     view: 'h6',
                    //     title: 'Heading 6',
                    //     class: 'ck-heading_heading6'
                    // }
                ]
            },

            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'AIAssistant',
                'CKBox',
                'CKFinder',
                'EasyImage',

                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType',
                'SlashCommand',
                'Template',
                'DocumentOutline',
                'FormatPainter',
                'TableOfContents',
                'PasteFromOfficeEnhanced'
            ]
        });
        }


        // $(document).ready(function() {
        //     $(document).on('click', '.cloneInput', function(e) {
        //         e.preventDefault();
        //         // $(this).each(function() {
        //         let cloneDiv = $(this).closest('form').find('.card-body').last();
        //         let $options = cloneDiv.find("input[name='options[]']").val();
        //         let $value = cloneDiv.find("input[name='key[]']").val();
        //         let $key = cloneDiv.find("input[name='value[]']").val();
        //         if ($options !== "" && $key !== "" && $value !== "") {
        //             let $clonedDiv = cloneDiv.clone();
        //             $clonedDiv.find('input').val('');
        //             $clonedDiv.find('.ck-restricted-editing_mode_standard').html("");
        //             cloneDiv.after($clonedDiv);
        //         }
        //         // });
        //     });
        // });
    </script>
@endsection

