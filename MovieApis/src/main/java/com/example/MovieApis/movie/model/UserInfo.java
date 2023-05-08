package com.example.MovieApis.movie.model;





//import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class UserInfo {
    
    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private long id ;

    //@Column
    private String Name ;
    private String Password;

    public String getName(){
        return Name ;
    }
    public void setName(String Name){
        this.Name = Name ;
    }
    public String getPassword(){
        return Password ;
    }
    public void setPassword(String Password){
        this.Password = Password ;
    }
    public long getId() { return id ;}
    public void setId(long Id) { this.id = Id ; }

    @Override
    public String toString()
    {
        return this.Name +' '+ this.Password ;
    }
    
}
