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