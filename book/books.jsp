<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>
    <h1>Book List</h1>
    <ul>
        <c:forEach items="${books}" var="book">
            <li>${book.title} by ${book.author}</li>
        </c:forEach>
    </ul>
</body>
</html>
