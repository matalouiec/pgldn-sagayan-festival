<template>
  <div class="col-md-12">
    <div class="card card-default">
      <div class="card-title">
        <div class="card-header">Final Result</div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center" rowspan="2">Rank</th>
              <th class="text-center" rowspan="2">Contestants</th>
              <th
                class="text-center"
                colspan="5"
                style="background:rgba(64, 160, 255,0.5);"
              >CRITERIA FOR JUDGING</th>
              <th class="text-center" rowspan="2">TOTAL (100%)</th>
            </tr>
            <tr>
              <th class="text-center" title="Interpretation (30%)">Interpretation (30%)</th>
              <th class="text-center" title="Choreography">Choreography (30%)</th>
              <th class="text-center" title="Costume">Costume (10%)</th>
              <th class="text-center" title="Sagayan">Sagayan Beat (20%)</th>
              <th class="text-center" title="Rhythm">Rhythm (10%)</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="rank in rankList"
              v-bind:key="rank.id"
              v-bind:class="{ final: rank.isFinal==1 }"
            >
              <th scope="row" class="text-center">{{ rank.seqno }}</th>
              <td>
                <a
                  href="#"
                  data-toggle="modal"
                  :data-target="'#MyModal'+rank.parent"
                  v-if="rank.isFinal==0"
                >
                  <b style="color:red;">{{ rank.Contestants }}</b>
                  <br>
                  <sub>({{ rank.representing }})</sub>
                </a>
                <a href="#" data-toggle="modal" data-target="#msgBox01" v-if="rank.isFinal==1">
                  <b  style="color:red;">{{ rank.Contestants }}</b>
                  <br>
                  <sub>({{ rank.representing }})</sub>
                </a>
              </td>
              <td class="text-center">{{ rank.Interpretation }}</td>
              <td class="text-center">{{ rank.Choreography }}</td>
              <td class="text-center">{{ rank.Costume }}</td>
              <td class="text-center">{{ rank.SagayanBeat }}</td>
              <td class="text-center">{{ rank.Rhythm }}</td>
              <td class="text-center">{{ rank.TOTAL.toFixed(2) }}%</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  props: ["categoryid"],
  data() {
    return {
      rankList: []
    };
  },
  methods: {
    getRankFemale() {
      axios
        .post("/scoreboard/question-answer/rank")
        .then(response => {
          this.rankList = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  },
  created() {
    this.getRankFemale();
    setInterval(() => {
      this.getRankFemale();
    }, 2000);
  }
};
</script>
<style scoped>
sub {
  font-size: 12px;
}
</style>

