package org.springframework.samples.petclinic.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class ElectricityBillController {

   @PostMapping("/calculate")
   public String calculateElectricityBill(@RequestParam("units") int units, Model model) {
      double bill = 0.0;
      if (units <= 50) {
         bill = units * 3.5;
      } else if (units <= 150) {
         bill = 50 * 3.5 + (units - 50) * 4.0;
      } else if (units <= 250) {
         bill = 50 * 3.5 + 100 * 4.0 + (units - 150) * 5.2;
      } else {
         bill = 50 * 3.5 + 100 * 4.0 + 100 * 5.2 + (units - 250) * 6.5;
      }
      model.addAttribute("bill", bill);
      return "result";
   }
}
