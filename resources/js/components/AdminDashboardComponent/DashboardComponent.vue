<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">FINAL RESULT</div>
          <div class="card-body">
            <div class="row">
              <final-rank vwname="vw_qa"></final-rank>
              <judges-gauge :catid="14" :levelid="3"></judges-gauge>
            </div>
            <br>
            <div class="row">
              <judge-rank
                v-for="judge in judgesList"
                :key="judge.id"
                :judge="judge"
                style="margin-top:20px;"
              ></judge-rank>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      rounds: [],
      judgesList: []
    };
  },
  created() {
    this.getRounds();
    this.getActiveJudges();
  },
  methods: {
    getRounds: function() {
      axios
        .get("/round/getRoundsWithCategories")
        .then(response => {
          this.rounds = response.data;
        })
        .catch(err => {
          return err;
        });
    },
    getActiveJudges: function() {
      axios
        .get("/judges")
        .then(response => {
          this.judgesList = response.data;
        })
        .catch(err => {
          return err;
        });
    }
  }
};
</script>


