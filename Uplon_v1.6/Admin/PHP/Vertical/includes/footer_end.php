<!-- google analytic code -->


<!-- google analytic code ends here -->

<!-- following js will activate the menu in left side bar based on url -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar-menu a").each(function() {
            if (this.href == window.location.href) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });
</script>

</body>
</html>