console.log('hi');
const url = 'http://localhost/Ecom%20website/api/api_user_table.php';
fetch(url)
  .then((response) => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Parse response as JSON
  })
  .then((data) => {
    console.log('API response:', data);
    // Do something with the API data
  })
  .catch((error) => console.error('Error fetching the API:', error));
