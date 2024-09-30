package railwayguide;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Color;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JComboBox;
import javax.swing.JRadioButton;
import javax.swing.ButtonGroup;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.awt.event.ActionEvent;
import javax.swing.JSeparator;
import javax.swing.border.LineBorder;
import javax.swing.JTable;
import javax.swing.JFormattedTextField;
import javax.swing.table.DefaultTableModel;
import javax.swing.JScrollPane;
import javax.swing.border.BevelBorder;
import javax.swing.border.MatteBorder;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import javax.swing.JList;
import javax.swing.JToggleButton;
import javax.swing.JCheckBox;

public class admindashboard extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField nameField;
	private JTextField EmailField;
	private JTextField PasswordField;
	private JTextField textField_1;
	private JTable table;
	protected JLabel searchField;
	private JTextField roleField2;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					admindashboard frame = new admindashboard();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public admindashboard() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 1363, 798);
		contentPane = new JPanel();
		contentPane.setBackground(new Color(0, 204, 153));
		contentPane.setForeground(new Color(0, 255, 255));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBounds(48, 91, 620, 557);
		panel.setBorder(new MatteBorder(10, 10, 10, 10, (Color) new Color(0, 153, 0)));
		panel.setBackground(new Color(0, 153, 0));
		contentPane.add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel_1 = new JLabel("Staff Register");
		lblNewLabel_1.setBounds(258, 10, 144, 63);
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 20));
		panel.add(lblNewLabel_1);
		
		nameField = new JTextField();
		nameField.setBounds(216, 116, 286, 35);
		panel.add(nameField);
		nameField.setColumns(10);
		
		EmailField = new JTextField();
		EmailField.setBounds(216, 209, 286, 35);
		EmailField.setColumns(10);
		panel.add(EmailField);
		
		JLabel lblNewLabel_2_1 = new JLabel("Full Name:");
		lblNewLabel_2_1.setBounds(54, 125, 117, 13);
		lblNewLabel_2_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		panel.add(lblNewLabel_2_1);
		
		JLabel lblNewLabel_2_1_1_1 = new JLabel("Email Address:");
		lblNewLabel_2_1_1_1.setBounds(54, 218, 117, 13);
		lblNewLabel_2_1_1_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		panel.add(lblNewLabel_2_1_1_1);
		
		JLabel lblNewLabel_2_1_1_1_1 = new JLabel("User Role:");
		lblNewLabel_2_1_1_1_1.setBounds(54, 306, 117, 13);
		lblNewLabel_2_1_1_1_1.setFont(new Font("Tahoma", Font.BOLD, 15));
		panel.add(lblNewLabel_2_1_1_1_1);
		
		JLabel lblNewLabel_2_1_1_1_2 = new JLabel("Password:");
		lblNewLabel_2_1_1_1_2.setBounds(54, 404, 117, 13);
		lblNewLabel_2_1_1_1_2.setFont(new Font("Tahoma", Font.BOLD, 15));
		panel.add(lblNewLabel_2_1_1_1_2);
		
		PasswordField = new JTextField();
		PasswordField.setBounds(216, 395, 286, 35);
		PasswordField.setColumns(10);
		panel.add(PasswordField);
		
		JSeparator separator = new JSeparator();
		separator.setBounds(10, 483, 1, 2);
		panel.add(separator);
		
		roleField2 = new JTextField();
		roleField2.setColumns(10);
		roleField2.setBounds(216, 304, 286, 35);
		panel.add(roleField2);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBounds(688, 91, 595, 557);
		panel_1.setBorder(new MatteBorder(10, 10, 10, 10, (Color) new Color(0, 153, 0)));
		contentPane.add(panel_1);
		panel_1.setBackground(new Color(0, 204, 153));
		panel_1.setForeground(new Color(0, 255, 0));
		panel_1.setLayout(null);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(25, 56, 541, 462);
		panel_1.add(scrollPane);
		
		table = new JTable();
		table.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent e) {
				int selectedRow = table.getSelectedRow(); // Get the selected row index

			    if (selectedRow != -1) { // Check if a row is selected
			        nameField.setText(table.getValueAt(selectedRow, 1).toString()); // Update name field
			        EmailField.setText(table.getValueAt(selectedRow, 2).toString()); // Update email field
			        roleField2.setText(table.getValueAt(selectedRow, 3).toString()); // Update role field
			    }
				
			}
		});
		scrollPane.setViewportView(table);
		
		JButton btnNewButton = new JButton("VIEW");
		btnNewButton.setBounds(392, 688, 101, 26);
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				staff staffobject=new staff();
				DefaultTableModel model=staffobject.view();
				table.setModel(model);
				
				
				
				
				
				
				
			}
		});
		contentPane.add(btnNewButton);
		btnNewButton.setBackground(new Color(0, 102, 255));
		btnNewButton.setFont(new Font("Tahoma", Font.BOLD, 15));
		
		JButton btnUpdate = new JButton("UPDATE");
		btnUpdate.setBounds(650, 688, 109, 26);
		contentPane.add(btnUpdate);
		btnUpdate.setBackground(new Color(0, 204, 102));
		btnUpdate.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				 // Create an instance of the staff class
		        staff staffManager = new staff();
		        
		        

				
				int idToUpdate = getSelecteIdFromTable();
	            String newName = nameField.getText();
	            String newEmail = EmailField.getText();
	            String newRole = roleField2.getText();
	           
			       

			        // Call the update method on the instance
			        boolean updated = staffManager.update( newName, newEmail, newRole, idToUpdate);
			        if (updated) {
			        	
			        	nameField.setText("");
			        	 EmailField.setText("");
			        	 roleField2.setText("");
			            JOptionPane.showMessageDialog(null, "Staff information updated successfully.");
			        } else {
			            JOptionPane.showMessageDialog(null, "Failed to update staff information.", "Error", JOptionPane.ERROR_MESSAGE);
			        }
			}

			private int getSelecteIdFromTable() {
				int selectedRow = table.getSelectedRow(); // Assuming 'table' is your JTable
			    if (selectedRow != -1) { // If a row is selected
			        // Assuming the ID is in the first column of the table
			        return Integer.parseInt(table.getValueAt(selectedRow, 0).toString());
			    } else {
			        JOptionPane.showMessageDialog(null, "Please select a row from the table.");
			        return -1; // Return -1 or another indicator if no row is selected
			    }
				
			}
		});
		btnUpdate.setFont(new Font("Tahoma", Font.BOLD, 15));
		
		JButton btnDelete = new JButton("DELETE");
		btnDelete.setBounds(916, 688, 109, 26);
		contentPane.add(btnDelete);
		btnDelete.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			  
	       int result=JOptionPane.showConfirmDialog(null, "are you want to delete?","Warning",JOptionPane.YES_NO_OPTION);
	       try{
	    	   staff staffObject=new staff();
	    	   
	    	   int idToDelete=getSelectedIdFromTable();
	    	   boolean sucess= staffObject.delete(idToDelete);
	    	   
	    	   if(sucess) {
	    		   JOptionPane.showMessageDialog(btnDelete,"Staff Deleted Sucessfully");
	    		   
	    		   
	    		   DefaultTableModel model=staffObject.view();
	    		   table.setModel(model);
	    	   }else {
	    		   JOptionPane.showMessageDialog(btnDelete,"Staff Deleted Faill");
	    	   }
	    	   
	       }catch(SQLException ex) {
	    	   ex.printStackTrace();
	       }
	    	   
	    	   	   
	    	   
	       }
	    	   
	       
	
			
			
			private int getSelectedIdFromTable() {
				 int selectedRowIndex = table.getSelectedRow();
				 if (selectedRowIndex != -1) {

					 return (int) table.getValueAt(selectedRowIndex, 0);
				 }else {
					 throw new IllegalStateException("No row is selected.");
				 }
				
				
			}
	       
	      
	      
	
	
	
	
	});
		btnDelete.setBackground(new Color(204, 0, 51));
		btnDelete.setFont(new Font("Tahoma", Font.BOLD, 15));
		
		JButton btnAdd = new JButton("ADD");
		btnAdd.setBounds(115, 688, 101, 26);
		btnAdd.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
			
			
			String name=nameField.getText();
			String email=EmailField.getText();
			String role=roleField2.getText();
			String password=PasswordField.getText();
			
			
			
			staff staffobject=new staff();
			boolean sucess =staffobject.insert(name, email, password, role);
			
			if(sucess) {
				
				JOptionPane.showMessageDialog(btnAdd, "Staff Insert Sucessfully");
				nameField.setText("");
				EmailField.setText("");
				PasswordField.setText("");
	
				
			}else {
				JOptionPane.showMessageDialog(btnAdd, "Staff Insert fail");
			}
		  }
			
		});
		btnAdd.setFont(new Font("Tahoma", Font.BOLD, 15));
		btnAdd.setBackground(new Color(204, 255, 255));
		contentPane.add(btnAdd);
		
		JButton btnExit = new JButton("EXIT");
		btnExit.setBounds(1156, 688, 109, 26);
		btnExit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				System.exit(0);
			}
		});
		btnExit.setFont(new Font("Tahoma", Font.BOLD, 15));
		btnExit.setBackground(new Color(255, 255, 102));
		contentPane.add(btnExit);
		
		textField_1 = new JTextField();
		textField_1.setBounds(48, 675, 1235, 60);
		textField_1.setBackground(new Color(0, 204, 153));
		contentPane.add(textField_1);
		textField_1.setColumns(10);
		
		JLabel lblNewLabel_2 = new JLabel("RAILWAY GUIDE PRO ADMIN DASHMASTER");
		lblNewLabel_2.setBounds(373, 29, 734, 37);
		lblNewLabel_2.setFont(new Font("Tahoma", Font.BOLD, 30));
		contentPane.add(lblNewLabel_2);
		
		JButton searchbtn = new JButton("SEARCH");
		searchbtn.setBounds(633, 654, 89, 23);
		searchbtn.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				String searchEmail = searchField.getText().trim();
		        if (!searchEmail.isEmpty()) {
		            try {
		                staff staffManager = new staff();
		                ResultSet resultSet = staffManager.searchByEmail(searchEmail);
		                loadDataIntoTable(resultSet);
		            } catch (SQLException ex) {
		                ex.printStackTrace();
		            }
		        }
			}
		});
		contentPane.add(searchbtn);
	}

	protected int getSelectedIdFromTable() {
		// TODO Auto-generated method stub
		return 0;
	}

	protected void loadDataIntoTable(ResultSet resultSet) {
		DefaultTableModel model = new DefaultTableModel();
	    table.setModel(model); // Set the new model to the table

	    try {
	        ResultSetMetaData metaData = resultSet.getMetaData();
	        int columnCount = metaData.getColumnCount();

	        // Add columns to the model
	        for (int columnIndex = 1; columnIndex <= columnCount; columnIndex++) {
	            model.addColumn(metaData.getColumnLabel(columnIndex));
	        }

	        // Add rows to the model
	        while (resultSet.next()) {
	            Object[] rowData = new Object[columnCount];
	            for (int columnIndex = 1; columnIndex <= columnCount; columnIndex++) {
	                rowData[columnIndex - 1] = resultSet.getObject(columnIndex);
	            }
	            model.addRow(rowData);
	        }
	    } catch (SQLException e) {
	        e.printStackTrace();
	    }
		
		
	}
}
