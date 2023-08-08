<!DOCTYPE html>
<html>
<head>
    <title>Colleauges Names</title>
</head>
<body>

    <ul>
        <c:forEach items="${names}" var="Names">
            <li>${name.number} by ${name.name}</li>
        </c:forEach>
    </ul>
</body>
</html>
