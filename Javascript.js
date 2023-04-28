var loadMoreButton = document.getElementById('load-more-button');
loadMoreButton.addEventListener('click', function() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var newBooks = JSON.parse(xhr.responseText);
      // Append newBooks to the book container
    }
  };
  xhr.open('GET', 'load-more.php', true);
  xhr.send();
});