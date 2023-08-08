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
        List<Book> names = getNames(); // Get the list of names
        request.setAttribute("names", names); // Pass the list to the JSP page

        // Forward the request to the JSP page
        request.getRequestDispatcher("/names.jsp").forward(request, response);
    }

    private List<names> getNames() {
        List<Names> names = new ArrayList<>();
        names.add(new names("Employee 1", "TeddyLikeABear"));
        names.add(new names("Employee 2", "BadGirlBongi"));
        names.add(new names("Employee 3", "MFANAMKHULU"));
        return names;
    }
}
