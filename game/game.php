<!DOCTYPE HTML>
<html>
	<head>
		<style type="text/css">
			.rectangle { margin: 10px; width: 100px; height: 100px; background-color: green; -ms-touch-action: none; }
			.selected { background-color: lightgreen; }
		</style>
		
		<script type="text/javascript">
		
			var elementAlignSum = [3];
			var selectedElements = [];
			var timeVar;
			
			function isEquals(source, target)
			{
				if(source == target)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			
			function isAlign(elements)
			{
				if((elements[0].innerHTML | 0) + (elements[1].innerHTML | 0) == elementAlignSum[0])
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			
			function appendElements(source, target)
			{
				target.appendChild(source.lastChild);
				source.appendChild(target.firstChild);
			}
								
			function swapElements()
			{
				this.classList.add('selected');
				
				if(isEquals(selectedElements.push(this), 2) == true)
				{
					clearTimeout(timeVar);
					
					appendElements(selectedElements.pop(), selectedElements.pop());
				}
				
				if(isAlign(elements) == true)
				{	
					timeVar = setTimeout(function()
					{			
						for (i = 0; i < elements.length; ++i)
						{
							elements[i].classList.add('selected');
						}
					}, 0);
				}
				else
				{
					timeVar = setTimeout(function()
					{						
						for (i = 0; i < elements.length; ++i)
						{
							elements[i].classList.remove('selected');
						}
					}, 1000);
				}
			}
			
		</script>
	</head>
	
	<body>
		<div id="element-container">
			<div id="element-0" class="rectangle">3</div>
			<div id="element-1" class="rectangle">2</div>
			<div id="element-2" class="rectangle">1</div>
		</div>
		
		<script type="text/javascript">
		
			var elements = document.querySelectorAll('div.rectangle');
			
			[].forEach.call(elements, function (element)
			{
				element.addEventListener('mousedown', this.swapElements, false);
			});
		
		</script>
	</body>
</html>