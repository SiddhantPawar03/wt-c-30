package com.example.MovieApis.movie;





import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.example.MovieApis.movie.Repository.UserInfoRepository;
import com.example.MovieApis.movie.model.TrialModel;
import com.example.MovieApis.movie.model.UserEntity;
import com.example.MovieApis.movie.model.UserInfo;

@RestController
@CrossOrigin
public class Controller {
    @Autowired
    UService service;
    @Autowired
    UserService userService ;
    //UserInfoRepository userInfoRepository ;
    //MovieRepository MovieRepository ;
    
    

    @GetMapping("/getMovies")
    public Object getMovies()
    {
        return service.getMovies() ; 
    }    
    @GetMapping("/hello")
    public String hello(@RequestParam(value = "name", defaultValue = "World") String name) {
      return String.format("Hello %s!", name);
    }

    @PostMapping("/PostCheck")
        public TrialModel PostCheck(@RequestBody TrialModel movie)
        {
            return movie;
        }
    
    @PostMapping("/SaveUser")
    public UserEntity saveUser(@RequestBody UserEntity  u)
    {   System.out.println(u.getBook_name());
        System.out.println(u.getId());
        System.out.println(u);
        //MovieRepository.save(u);
        return service.save(u);
    }
    @PostMapping("/SaveCredential")
    public UserInfo saveCredential(@RequestBody UserInfo  u)
    {    
        System.out.println(u.getName());
        System.out.println(u.getPassword());
        System.out.println(u.toString()) ;
         //userInfoRepository.save(u);
        //return u ; 
        return service.saveCredentials(u);
    }
    @PostMapping("/CheckAccess")
    public boolean checkAccess(@RequestBody UserInfo u)
    {
        return service.login(u.getName() ,u.getPassword()) ;
    }
   


  // @DeleteMapping
  // @PutMapping   
}
