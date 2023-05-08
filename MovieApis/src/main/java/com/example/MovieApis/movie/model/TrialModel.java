package com.example.MovieApis.movie.model;


// Because of above two notations there is no need to make geeter and setter
public class TrialModel {
    private String movie ;
    private String comment ;
    private double rating ; 
    private String type ;

    public TrialModel( String movie , String comment, double d, String type)
    {
        this.movie = movie ;
        this.comment = comment ; 
        this.rating = d ;
        this.type = type;
    }

    public String getMovie()
    {
        return movie ;
    }
    public void setMovie(String movie){
        this.movie = movie ;
    }
    public String getComment(){
        return comment ;
    }
    public void setCommnet(String comment){
        this.comment = comment ;
    }
    public double getRating(){
        return rating ;
    }

    public void setRating(long rating){
        this.rating = rating ;
    }
    public String getType(){
        return type ;
    }
    public void setType (String type){
        this.type = type ;
    }
}
