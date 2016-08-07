/// Loaded these functions directly into browser console on classes.php page

// Test Loading Classes in display

// Change Classes variable. JSON.parse parse out a JSONstring to an javascript object
// Test by changing the object attrbutes
myclasses = JSON.parse('[{"name":"Science 102","id":"121"},{"name":"Math 102","id":"113"}]');
// Then load the displayMyClasses() function
displayMyClasses();

// Change Lessons variable
// Test by changing the objects attributes
mylessons = JSON.parse('[{"name":"Lesson 101","id":"1","vid":"https://www.youtube.com/embed/RrHnLXMTOWM"},{"name":"Lesson 102","id":"2","vid":"https://www.youtube.com/embed/6W0MHZ4jb4A"}]');
// Then load displayLessons();
displayLessons(mylessons);
