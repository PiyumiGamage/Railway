package railwayguide;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class MysqlConnection {
    private String username;
    private String pwd;
    private String dbname;
    private Connection conn;
	
    public MysqlConnection() {
    	this.dbname="projecteddb";
    	this.username="root";
    	this.pwd="";
    	connectDb();
    	
    }

	public Connection connectDb() {
		try {
			conn=DriverManager.getConnection("jdbc:mysql://localhost:3309/"+dbname,username,pwd);
		}catch(SQLException e) {
			System.out.print(e);
		}
		return conn;
		
	}
































}	
		
		

