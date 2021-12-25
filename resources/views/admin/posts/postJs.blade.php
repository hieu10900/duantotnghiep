{{--<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>--}}
<script src="{{ asset('ckeditor/ckeditor.js') }} "></script>
<script src="{{ asset('ckeditor/ckfinder/ckfinder.js') }} "></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#myTable').DataTable({
            responsive: true,

        });

        content = CKEDITOR.replace("content", {
            removePlugins: "exportpdf",
            height: '40rem',
            filebrowserBrowseUrl: '{{ asset('ckeditor/ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckeditor/ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckeditor/ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });

    });


    $(document).ready(function () {
        document.getElementsByName('content')[1].name = "contents";
        CKEDITOR.replace("contents", {
            removePlugins: "exportpdf",
            height: '40rem',
            filebrowserBrowseUrl: '{{ asset('ckeditor/ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckeditor/ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckeditor/ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
        $("#post-create").on('click', function (event) {
            var title_modal = document.getElementsByClassName("title-post-form");
            title_modal[0].innerHTML = "Thêm mới bài viết.";
            $("form .btn-form-create")[0].id = "post-form-create";
            hiden = $("form #formImage").hide();
            $(".user_create").show();

            $("#post-form-create").on('click', function (event) {
                event.preventDefault();
                $("#form_create .text-danger").text("");
                PostCreate = new FormData();
                PostCreate.append('image', $("#form_create input[name='image']")[0].files[0]);
                PostCreate.append('title', $("#form_create input[name='title']").val());
                PostCreate.append('content', CKEDITOR.instances.content.getData());
                PostCreate.append('_token', $("#form_create input[name='_token']").val());
                console.log(CKEDITOR.instances.content.getData());
                $.ajax({
                    type: "post",
                    enctype: 'multipart/form-data',
                    url: "{{ route('admin.post.store') }}",
                    data: PostCreate,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        if (data.status == 200) {
                            alert(data.message);
                            window.location.reload();
                        } else {
                            alert(data.message);
                        }
                    },
                    error: function (data) {
                        var errors = data.responseJSON;

                        if ($.isEmptyObject(errors) == false) {
                            $.each(errors.errors, function (key, value) {
                                var ErrorID = '#postCreat #' + key +
                                    'Error';
                                $(ErrorID).text(value);
                                console.log(ErrorID);
                            })
                        }
                    }
                });
            })

        })

        // end create


        //  delete
        $(".post_delete").on('click', function (event) {
            event.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Are you sure!",
                buttons: [true, "Delete"],
            }).then((willDelete) => {
                if (willDelete) {

                    $.ajax({
                        type: "POST",
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        url: "{{ route('admin.post.delete') }}",
                        data: {
                            id: id
                        },
                        success: function (data) {
                            if (data.status == 100) {
                                alert(data.message);
                                window.location.reload();
                            }
                        }
                    });
                } else {

                }
            });
            ;


        });


        // end delete
        // "{{ route('admin.post.delete') }}/" + id
        // update


        $(".post-modal-edit").on('click', function (event) {
            var title_modal = document.getElementsByClassName("title-post-form");
            title_modal[1].innerHTML = "Cập Nhật Bài Viết";
            $("form .btn-form-create")[1].id = "post-form-upload";
            var id_post = $(this).data('id');
            hiden = $("form #formImage").show();
            var url = "{{ route('admin.post.edit', ":id") }}";
            url = url.replace(':id', id_post);

            $.ajax({
                type: "get",
                url: url,
                success: function (response) {

                    $("#postEdit #id_post").val(response.editPost.id);
                    $("#postEdit #title").val(response.editPost.title);
                    $("#postEdit #avatar_old").val(response.editPost.image);
                    var img_url = "/image/product/" + response.editPost.image;
                    $("#postEdit #image_old").attr("src", img_url);
                    CKEDITOR.instances.contents.setData(response.editPost.content);

                },
                error: function (data) {

                }
            });
            // upload
            $("#post-form-upload").on('click', function (event) {
                event.preventDefault();
                postUpload = new FormData();
                var url = "{{ route('admin.post.update') }}";
                if ($("#postEdit #image")[0].files[0] != null) {
                    postUpload.append('image', $("#postEdit input[name='image']")[0].files[0]);
                }
                postUpload.append('id', $("#postEdit input[name='id_post']").val());
                postUpload.append('title', $("#postEdit input[name='title']").val());
                postUpload.append('content', CKEDITOR.instances.contents.getData());
                console.log(CKEDITOR.instances.contents.getData());
                postUpload.append('_token', $("#postEdit input[name='_token']").val());
                $.ajax({
                    type: "post",
                    url: url,
                    data: postUpload,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    timeout: 100000,
                    success: function (data) {
                        alert(data.message);
                        if (data.status == 200) {
                            window.location.reload();
                        }
                    },
                    error: function (data) {
                        var errors = data.responseJSON;
                        var ErrorID = '#postEdit #' + key + 'Error';
                        if ($.isEmptyObject(errors) == false) {
                            $.each(errors.errors, function (key, value) {

                                $(ErrorID).text(value);
                                console.log(ErrorID);
                            })
                        }
                    }
                });

            });


        });

    });
</script>
