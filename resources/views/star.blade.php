<div class="ui heart rating"></div>

<script type="text/javascript">
    $('.ui.heart.rating').rating({
        initialRating: '{{ $starValue }}',
        maxRating: 5,
        onRate: function(value) {
//            console.log(value);

            $.ajax({
                type: 'GET',
                url: '{{ route("laravolt.star.add") }}',
                data: {
                    value: value,
                    id: '{{ $obj->id }}',
                    className: '{{ str_replace("\\","\\\\", get_class($obj)) }}'
                },
                success: function(data) {
                    console.log(data);
                }
            })
        }
    });
</script>
</body>
</html>