</main>
    
    <script src="assets/app.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#nav-toggle, #small-toggle").click(function(){
                $(".main-small").toggle();
            });
        });
    </script>
    <!--<script>
    $(document).mouseup(function (e){
	var container = $(".main-small");
	if (!container.is(e.target) && container.has(e.target).length === 0){
		container.hide();	
	}
}); 
    </script>-->
    
</body>
</html>