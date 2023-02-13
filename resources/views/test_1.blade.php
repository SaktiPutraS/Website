<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <div id="myDiv" oncontextmenu="return false;">Right-click on this element to see the context menu</div>

    <script>
      const myDiv = document.getElementById('myDiv');

      myDiv.addEventListener('contextmenu', function(event) {
        event.preventDefault();

        // Create the context menu
        const menu = document.createElement('div');
        menu.classList.add('context-menu');

        // Add menu items to the context menu
        const menuItem1 = document.createElement('div');
        menuItem1.classList.add('context-menu-item');
        menuItem1.innerHTML = 'Menu item 1';

        const menuItem2 = document.createElement('div');
        menuItem2.classList.add('context-menu-item');
        menuItem2.innerHTML = 'Menu item 2';

        menu.appendChild(menuItem1);
        menu.appendChild(menuItem2);

        // Add the context menu to the page
        document.body.appendChild(menu);

        // Position the context menu
        menu.style.top = event.clientY + 'px';
        menu.style.left = event.clientX + 'px';
      });
    </script>

</body>
</html>
