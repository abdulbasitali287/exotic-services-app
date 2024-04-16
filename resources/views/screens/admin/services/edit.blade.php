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
                    SERVICES
                </h4>
            </div>
            {!! Form::open(['route' => ['service.update',$service->id],'files' => true]) !!}
                @method('PUT')
            <div class="row">
                    <div class="col">
                        <div class="form-group mb-2">
                            {{ Form::label('service name', 'Service Name', ['class' => 'form-label']) }}
                            {{ Form::text('service_name', old('service_name',$service->service_name) ,['class' => 'form-control']) }}
                            @error('service_name')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('service sub heading', 'Service Sub Heading', ['class' => 'form-label']) }}
                            {{ Form::text('sub_heading', old('sub_heading',$service->sub_heading) ,['class' => 'form-control']) }}
                            @error('sub_heading')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('Slug', 'Slug', ['class' => 'form-label']) }}
                            {{ Form::text('slug', old('slug',str_replace('-', ' ', $service->slug)) ,['class' => 'form-control']) }}
                            @error('slug')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="form-group mb-2">
                            {{ Form::label('service type', 'Service Type', ['class' => 'form-label']) }}
                            {{ Form::select('service_type', ['servicing garage' => 'SERVICING GARAGE'] , old('service_type',$service->service_type) , ['placeholder' => 'select service type...','class' => 'form-control']) }}
                            @error('service_type')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group mb-2">
                            {{ Form::label('navigation name', 'Navigation Name', ['class' => 'form-label']) }}
                            {{ Form::text('navigation_name', old('navigation_name',$service->navigation_name) ,['class' => 'form-control']) }}
                            @error('navigation_name')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('feature service', 'Feature Service', ['class' => 'form-label']) }}
                            {{ Form::select('feature_service', ['1' => 'YES','0' => 'NO'] , old('service_type',$service->feature_service) , ['placeholder' => 'select feature service...','class' => 'form-control']) }}
                            @error('feature_service')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('text on hover', 'Text on hover', ['class' => 'form-label']) }}
                            {{ Form::text('text_on_hover', old('text_on_hover',$service->text_on_hover) ,['class' => 'form-control']) }}
                            @error('text_on_hover')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('Service Banner', 'Service Banner', ['class' => 'form-label']) }}
                            {{ Form::file('service_banner',['class' => 'form-control','multiple' => true]) }}
                            <p class="text-muted py-2">(Dimensions 1900px X 750px)</p>
                            @error('service_banner')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('alt_text', 'alt text for banner image', ['class' => 'form-label']) }}
                            {{ Form::text('alt_text', old('alt_text',$service->alt_text) ,['class' => 'form-control']) }}
                            @error('alt_text')
                            <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            {{ Form::label('description', 'Body Description', ['class' => 'form-label']) }}
                            {{ Form::textarea('description', old('description',$service->description) ,['class' => 'form-control','rows' => 3,'id' => 'editor']) }}
                            <p class="text-muted py-2">0/500 Characters</p>
                            @error('description')
                                <span class="mt-2 text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success px-4 py-2">UPDATE SERVICE</button>
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

