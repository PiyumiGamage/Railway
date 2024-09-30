package railwayguide;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

public class staff {

      
	  
	  protected int id; 
	  protected String name;
	  protected String email;
      protected String addres;
      protected String password;
      protected String role;
      protected MysqlConnection dbc;
	  
     
      
      public staff(String name,String email,String password ,String role) {
    	
    	  
    	  this.id=id;
    	  this.name=name;
    	  this.email=email;
    	  this.password=password;
    	  this.role=role;
    	 
    	  
    	  
      }

     public staff() {
    	 dbc=new MysqlConnection();
    	 	 
     }

     
     
     public Boolean insert(String name,String email,String password ,String role) {
    	 
    	 try {
    		 
    		 
    		 
    	 String mysql="INSERT INTO staffReg (name,email,password ,role) values(?,?,?,?)";
    	 PreparedStatement Statement= dbc.connectDb().prepareStatement(mysql); 
    	 
    	 
    	
    	 
    	 Statement.setString(1,name);
    	 Statement.setString(2,email);
    	 Statement.setString(3,password);
    	 Statement.setString(4,role);
    	 
    	 
    	if(name==null||email==null|| password==null|| role==null) {
    		return false;
    		
    	}
    	
    	else {
    		int rowsInserted=Statement.executeUpdate();
    		if  (rowsInserted>0) {
    			return true;	
    		}
    		else {
    			
    			return false;
    		}	
    	}
    		 
    	 }catch( SQLException e){
    		 return false;
    		
    	}
     }

     
     //view
    public DefaultTableModel view() {
    	
    	  DefaultTableModel model=new DefaultTableModel();
    	  
    	  
    	  
    	  try {
    		 String mysql="SELECT id,name,email,role FROM staffReg" ;
    		 PreparedStatement Statement= dbc.connectDb().prepareStatement(mysql); 
    		 
    		 ResultSet resultSet=Statement.executeQuery();
    		 
    		  int columCount=resultSet.getMetaData().getColumnCount();
    		  for(int s=1;s<=columCount;s++) {
    			 model.addColumn(resultSet.getMetaData().getColumnName(s));
    			  
    			  
    		  }
    		
    		  while(resultSet.next()) {
    			  
    			  Object[] rowData=new Object[columCount];
    			  for(int s=0;s<columCount;s++) {
    				  
    				  rowData[s]=resultSet.getObject(s+1);
    			  }
    		   model.addRow(rowData);
    		  
    		  }
    	  }
    	
          catch(SQLException e) {
        	  
        	  e.printStackTrace();
          }
		return model;
    
    }

    
    //delete
    public boolean delete (int id)throws SQLException{
    	
    	String mysql="DELETE FROM staffReg where id=?";
    	
    	try (
    		
    		PreparedStatement Statement=dbc.connectDb().prepareStatement(mysql);
    	)
    	
    	{
    		Statement.setInt(1,id);
    		int rowsDeleted=Statement.executeUpdate();
    		
    		
    		if(rowsDeleted>0) {
    			
    			return true;
    		}
    		else {
    			
    			return false ;
    		
    		}
    	
    	}

    }

 

	
	//update
    public boolean update(String name, String email, String role, int id) {
        String sql = "UPDATE staffReg SET name = ?, email = ?, role = ? WHERE id = ?";
        try (PreparedStatement statement = dbc.connectDb().prepareStatement(sql)) {
            statement.setString(1, name);
            statement.setString(2, email);
            statement.setString(3, role);
            statement.setInt(4, id);

            int rowsUpdated = statement.executeUpdate();
            return rowsUpdated > 0;
        } catch (SQLException e) {
            e.printStackTrace();
            return false;
        }
    }

	
	
	public ResultSet searchByEmail(String searchEmail) throws SQLException {
        PreparedStatement statement = null;
        ResultSet resultSet = null;
        try {
        	
            String mysql = "SELECT * FROM staffReg WHERE email LIKE ?";
            PreparedStatement Statement= dbc.connectDb().prepareStatement(mysql); 
            statement.setString(1, "%" + searchEmail + "%");
            resultSet = statement.executeQuery();
            return resultSet;
        } catch (SQLException e) {
            
            throw e;
        }
    }
	
	
}
