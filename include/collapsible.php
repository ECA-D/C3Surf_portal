<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $( function() {
  $( "#accordion" ).accordion({
  collapsible: true
  });
  } );
</script>

<style>
  button.accordion {
  background-color: #941333;
  height: 40px;
  color: #FFFFFF;
  cursor: pointer;
  padding: 8px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 18px;
  font-family: sans-serif;
  font-weight: bold;
  transition: 0.4s;
  }
  
  button.accordion.active, button.accordion:hover {
  background-color: #941333; 
  }
  
  div.panel {
  padding: 0 18px;
  display: none;
  background-color: #f4f4f4;
  box-shadow: 0px 5px 5px #666;
  }
</style>
