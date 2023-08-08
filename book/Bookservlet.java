import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class BookServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;

    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        List<Book> books = getBooks(); // Get the list of books
        request.setAttribute("books", books); // Pass the list to the JSP page

        // Forward the request to the JSP page
        request.getRequestDispatcher("/books.jsp").forward(request, response);
    }

    private List<Book> getBooks() {
        List<Book> books = new ArrayList<>();
        books.add(new Book("Book 1", "Author 1"));
        books.add(new Book("Book 2", "Author 2"));
        books.add(new Book("Book 3", "Author 3"));
        return books;
    }
}
