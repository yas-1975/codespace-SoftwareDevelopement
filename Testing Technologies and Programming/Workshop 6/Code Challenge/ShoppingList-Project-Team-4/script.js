// Event listener for the 'Add' button
document.getElementById('addBtn').addEventListener('click', function() {
    // Retrieve the value from the input field
    var itemValue = document.getElementById('itemInput').value;
    if (itemValue) {
      // Create a new list item element
      var li = document.createElement('li');
      // Set the inner HTML of the list item, including a checkbox and delete button
      li.innerHTML = '<input type="checkbox"> <span>' + itemValue + '</span>' +
                     '<span class="delete-btn"> ×</span>';
      // Add the new list item to the unordered list
      document.getElementById('itemList').appendChild(li);
      // Clear the input field after adding the item
      document.getElementById('itemInput').value = '';
  
      // Attach event listeners to all delete buttons
      var deleteBtns = document.getElementsByClassName('delete-btn');
      for (var i = 0; i < deleteBtns.length; i++) {
        deleteBtns[i].addEventListener('click', function() {
          // Remove the parent list item of the delete button when clicked
          this.parentNode.remove();
        });
      }
  
      // Attach event listener to all checkboxes
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      checkboxes[checkboxes.length - 1].addEventListener('change', function() {
        var text = this.nextElementSibling; // Get the sibling span element
        if (this.checked) {
          text.style.textDecoration = 'line-through'; // line-through the text
        } else {
          text.style.textDecoration = 'none'; // Remove line-through if checkbox is unchecked
        }
      });
    }
  });
  